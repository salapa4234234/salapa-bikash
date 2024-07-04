<style>
:root {
    --white: #058100;
    --background: transparent;
    --background-hover: rgba(#058100, 0.5);
    --primary-blue: #2a8b26;
    --blue-gray: rgba(#058100, 0.5);
}

.faq-container {
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    /* margin-top: 1rem; */
    max-width: 90.5rem;
    padding: 2rem;
    border-radius: 1em;
    background-color: var(--background);
}

details {
    font-size: 1.8rem;
    /* margin: 0 auto; */
    width: 100%;
    border-radius: 0.5rem;
    position: relative;
    max-width: 90.5rem;
    margin-right: auto;
    transition: all 0.3s ease-in-out;
}

details:hover {
    background-color: var(--background-hover);
}

details:hover svg {
    stroke: var(--primary-blue);
}

details[open] {
    background-color: var(--background-hover);
}

details[open] .faq-title {
    color: var(--primary-blue);
}

summary {
    user-select: none;
    cursor: pointer;
    font-weight: 600;
    display: flex;
    list-style: none;
    padding: 1rem;
    align-items: center;
}

summary svg {
    stroke: var(--white);
}

details[open] summary svg {
    stroke: var(--primary-blue);
    transform: rotate(90deg);
}

summary:hover .faq-title {
    color: var(--primary-blue);
}

summary::-webkit-details-marker {
    display: none;
}

summary:focus {
    outline: none;
}

.faq-title {
    color: var(--white);
    width: 90%;
    transition: all 250ms ease-in-out;
}

.faq-content {
    color: var(--white);
    padding: 0.2rem 1rem 1rem 1rem;
    font-weight: 300;
    line-height: 1.5;
}

.expand-icon {
    pointer-events: none;
    position: absolute;
    right: 1rem;
    transition: all 150ms ease-out;
}

.faq-container details .faq-content {
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.3s ease-out;
}

.faq-container details[open] .faq-content {
    max-height: 1000px;
    /* Adjust maximum height as needed */
}

.faq-container summary svg {
    transition: transform 0.3s ease-out;
}

.faq-container summary svg.expanded {
    transform: rotate(90deg);
}
</style>
<div class="faq-container">
    <?php
			$count=1;
			$result=$obj->select("select * from tbl_faq where status='1' and del='1'");
       		while($data=mysqli_fetch_assoc($result)){
		?>
    <details>
        <summary>
            <span class="faq-title">
                <?php
						echo "(".$count.") ".$data['question'];
					?>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 6l6 6l-6 6"></path>
            </svg>
        </summary>
        <div class="faq-content">
            <?php
          echo $data['answer'];
        ?>
        </div>
    </details>
    <?php
			}
		?>
</div>

<script>
class Accordion {
    constructor(el) {
        this.el = el;
        this.summary = el.querySelector("summary");
        this.content = el.querySelector(".faq-content");
        this.expandIcon = this.summary.querySelector(".expand-icon");
        this.animation = null;
        this.isClosing = false;
        this.isExpanding = false;
        this.summary.addEventListener("click", (e) => this.onClick(e));
    }

    onClick(e) {
        e.preventDefault();

        if (this.isClosing || !this.el.open) {
            this.open();
        } else if (this.isExpanding || this.el.open) {
            this.shrink();
        }
    }

    shrink() {
        this.isClosing = true;

        const startHeight = this.el.offsetHeight;
        const endHeight = this.summary.offsetHeight;

        if (this.animation) {
            this.animation.cancel();
        }

        this.animation = this.el.animate({
            height: [startHeight + "px", endHeight + "px"],
        }, {
            duration: 200,
            easing: "ease-out",
        });

        this.animation.onfinish = () => {
            this.expandIcon.setAttribute("src", "assets/plus.svg");
            return this.onAnimationFinish(false);
        };
        this.animation.oncancel = () => {
            this.expandIcon.setAttribute("src", "assets/plus.svg");
            return (this.isClosing = false);
        };
    }

    open() {
        this.el.style.height = this.el.offsetHeight + "px";
        this.el.open = true;
        window.requestAnimationFrame(() => this.expand());
    }

    expand() {
        this.isExpanding = true;

        const startHeight = this.el.offsetHeight;
        const endHeight = this.summary.offsetHeight + this.content.offsetHeight;

        if (this.animation) {
            this.animation.cancel();
        }

        this.animation = this.el.animate({
            height: [startHeight + "px", endHeight + "px"],
        }, {
            duration: 200,
            easing: "ease-out",
        });

        this.animation.onfinish = () => {
            this.expandIcon.setAttribute("src", "assets/minus.svg");
            return this.onAnimationFinish(true);
        };
        this.animation.oncancel = () => {
            this.expandIcon.setAttribute("src", "assets/minus.svg");
            return (this.isExpanding = false);
        };
    }

    onAnimationFinish(open) {
        this.el.open = open;
        this.animation = null;
        this.isClosing = false;
        this.isExpanding = false;
        this.el.style.height = "";
    }
}

document.querySelectorAll("details").forEach((el) => {
    new Accordion(el);
});
</script>