<style>
/* Style the tab */




.faq-container {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    padding: 2rem;
    border-radius: 1em;
    background-color: #f3f3f3;
    margin: 1rem 0;
}

details {
    font-size: 1rem;
    width: 100%;
    border-radius: 0.5rem;
    position: relative;
    transition: all 0.3s ease-in-out;
}

details:hover {
    /* background-color: var(--background-hover); */
}

/* details:hover svg {
    stroke: var(--primary-blue);
} */

details[open] {
    /* background-color: var(--background-hover); */
}

/* details[open] .faq-title {
    color: var(--primary-blue);
} */

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
    stroke: black;
}

details[open] summary svg {
    transform: rotate(90deg);
}

/* summary:hover .faq-title {
    color: var(--primary-blue);
} */

summary::-webkit-details-marker {
    display: none;
}

summary:focus {
    outline: none;
}

.faq-title {
    font-size: 1.5rem;
    color: black;
    width: 90%;
    transition: all 250ms ease-in-out;
}

.faq-content {
    color: black;
    padding: 0.2rem 1rem 1rem 1rem;
    font-weight: 300;
    font-size: 1.5rem;
    line-height: 1.5;
}

.expand-icon {
    pointer-events: none;
    position: absolute;
    right: 1rem;
    transition: all 150ms ease-out;
}

.tab {
    display: flex;
    justify-content: space-between;
    color: black;
    min-width: 200px;
    overflow-x: auto;
    scrollbar-width: thin;
}



/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    /* transition: 0.3s; */
    font-size: 15px;
    font-weight: 600;
    text-wrap: nowrap;
}



/* Create an active/current tablink class */
.tab button.active {
    border-bottom: 2px solid #cb1a1a;
    color: #d50d0d;

}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
    width: 100%;
}

.report-tab {
    width: 100%;
}

.report-tabs {
    width: 100%;
}

.tabs-container {
    width: 100%;
}
</style>

<div class="container">
    <div class="report-tabs">
        <div class="report-tab">
            <div class="tab">
                <button class="tablinks active" onclick="openCity(event, 'Financial')">Basel Report</button>
                <button class="tablinks" onclick="openCity(event, 'Qarterly')">Base Rate</button>
                <button class="tablinks" onclick="openCity(event, 'Annual')">Spread Rate</button>
                <button class="tablinks" onclick="openCity(event, 'Basel')">Interest Rate</button>
                <button class="tablinks" onclick="openCity(event, 'Loan')">Loans</button>
                <button class="tablinks" onclick="openCity(event, 'aml')">AML-CFT</button>
            </div>

            <div class="tabs-container">
                <div id="Financial" class="tabcontent" style="display:block">
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    2080-81
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                <ul>
                                    <li><a href="../../files/contentFile/042internship.pdf" target="_blank">Q3 of Fiscal
                                            Year 2080-81</a></li>
                                    <li><a href="#">Q3 of Fiscal Year 2080-81</a></li>
                                    <li><a href="#">Q3 of Fiscal Year 2080-81</a></li>
                                    <li><a href="#">Q3 of Fiscal Year 2080-81</a></li>
                                </ul>
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    2079-80
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    2070-80
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                </div>

                <div id="Qarterly" class="tabcontent">
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    2081-80
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    2070-80
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    2079-80 </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                </div>
                <div id="Annual" class="tabcontent">
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    2080-81 </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                <ul>
                                    <li><a href="../../files/contentFile/042internship.pdf" target="_blank">Q3 of Fiscal
                                            Year 2080-81</a></li>
                                    <li><a href="#">Q3 of Fiscal Year 2080-81</a></li>
                                    <li><a href="#">Q3 of Fiscal Year 2080-81</a></li>
                                    <li><a href="#">Q3 of Fiscal Year 2080-81</a></li>
                                </ul>
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                </div>
                <div id="Basel" class="tabcontent">
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                </div>
                <div id="Base" class="tabcontent">
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                </div>
                <div id="Loan" class="tabcontent">
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                </div>
                <div id="aml" class="tabcontent">
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                    <div class="faq-container">
                        <details>
                            <summary>
                                <span class="faq-title">
                                    How long does the course take?
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="expand-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </summary>
                            <div class="faq-content">
                                The video content takes more than 4.5 hours. In addition, you can test gained knowledge
                                on 30 quizzes and
                                practical tasks.
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
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