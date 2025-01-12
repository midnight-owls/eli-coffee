const monthYearElement = document.getElementById("monthYear");
const datesElement = document.getElementById("dates");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const notes = {}; // Object to store notes for each date
const notesTextArea = document.getElementById("notesTextArea");

let currentDate = new Date();

const updateCalendar = () => {
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth();

    const firstDay = new Date(currentYear, currentMonth, 1);
    const lastDay = new Date(currentYear, currentMonth + 1, 0);
    const totalDays = lastDay.getDate();
    const firstDayIndex = firstDay.getDay();

    const monthYearString = currentDate.toLocaleString("default", { month: "long", year: "numeric" });
    monthYearElement.textContent = monthYearString;

    let datesHTML = "";

    for (let i = firstDayIndex; i > 0; i--) {
        const prevDate = new Date(currentYear, currentMonth, -i + 1);
        datesHTML += `<div class="date inactive">${prevDate.getDate()}</div>`;
    }

    for (let i = 1; i <= totalDays; i++) {
		const dateKey = `${currentYear}-${currentMonth + 1}-${i}`;
		const isToday = 
			i === new Date().getDate() && 
			currentYear === new Date().getFullYear() && 
			currentMonth === new Date().getMonth();
		const activeClass = isToday ? "active" : "";
		const hasNoteClass = notes[dateKey] ? "has-note" : "";
		datesHTML += `<div class="date ${activeClass} ${hasNoteClass}" data-date="${dateKey}">${i}</div>`;
	}

    const lastDayIndex = lastDay.getDay();
    for (let i = 1; i <= 7 - lastDayIndex - 1; i++) {
        const nextDate = new Date(currentYear, currentMonth + 1, i);
        datesHTML += `<div class="date inactive">${nextDate.getDate()}</div>`;
    }

    datesElement.innerHTML = datesHTML;

    const today = new Date();
	if (currentYear === today.getFullYear() && currentMonth === today.getMonth()) {
		const todayElement = [...datesElement.children].find(
			(child) => 
				!child.classList.contains("inactive") && 
				Number(child.textContent.trim()) === today.getDate()
		);
		if (todayElement) {
			todayElement.classList.add("selected");
			const todayKey = `${today.getFullYear()}-${today.getMonth() + 1}-${today.getDate()}`;
			notesTextArea.value = notes[todayKey] || "";
			notesTextArea.setAttribute("data-date", todayKey);
		}
	}
};


prevBtn.addEventListener("click", () => {
	currentDate.setMonth(currentDate.getMonth() - 1);
	updateCalendar();
	setupDateSelection();
});

nextBtn.addEventListener("click", () => {
	currentDate.setMonth(currentDate.getMonth() + 1);
	updateCalendar();
	setupDateSelection();
});

// Add click event listener to dates
datesElement.addEventListener("click", (e) => {
	if (e.target.classList.contains("date") && !e.target.classList.contains("inactive")) {
		const selectedDate = `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${e.target.textContent.trim()}`;
		notesTextArea.value = notes[selectedDate] || "";
		notesTextArea.setAttribute("data-date", selectedDate);
	}
});

notesTextArea.addEventListener("input", () => {
	const selectedDate = notesTextArea.getAttribute("data-date");
	if (selectedDate) {
		notes[selectedDate] = notesTextArea.value;
		const dateElement = [...datesElement.children].find(
			(child) => child.textContent.trim() === selectedDate.split("-")[2]
		);
		if (dateElement) {
			if (notes[selectedDate]) {
				dateElement.classList.add("has-note");
			} else {
				dateElement.classList.remove("has-note");
			}
		}
	}
});

function setupDateSelection() {
	const dates = document.querySelectorAll(".date");
	dates.forEach(date => {
		date.addEventListener("click", function() {
			dates.forEach(d => d.classList.remove("selected"));
			this.classList.add("selected");
		});
	});
}

updateCalendar();
setupDateSelection();
