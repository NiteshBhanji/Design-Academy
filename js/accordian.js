/*const accordion = document.getElementsByClassName('question-wrapper');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    document.querySelector('.question-wrapper').classList.remove('active')
    this.classList.toggle('active');
  })
}*/


const accordionTitles = document.querySelectorAll(".question-wrapper");

accordionTitles.forEach((accordionTitle) => {
	accordionTitle.addEventListener("click", () => {
		if (accordionTitle.classList.contains("active")) {
			accordionTitle.classList.remove("active");
		} else {
			const accordionTitlesWithIsOpen = document.querySelectorAll(".active");
			accordionTitlesWithIsOpen.forEach((accordionTitleWithIsOpen) => {
				accordionTitleWithIsOpen.classList.remove("active");
			});
			accordionTitle.classList.add("active");
		}
	});
});
const accordionTitlesCustom = document.querySelectorAll(".acc-wrapper");

accordionTitlesCustom.forEach((accordionTitle) => {
	accordionTitle.addEventListener("click", () => {
		console.log("Accordion clicked");
		if (accordionTitle.classList.contains("active")) {
			console.log("Removing active class");
			accordionTitle.classList.remove("active");
		} else {
			const accordionTitlesWithIsOpen = document.querySelectorAll(".acc-wrapper.active");
			console.log("Closing other accordions");
			accordionTitlesWithIsOpen.forEach((accordionTitleWithIsOpen) => {
				accordionTitleWithIsOpen.classList.remove("active");
			});
			console.log("Adding active class");
			accordionTitle.classList.add("active");
		}
	});
});