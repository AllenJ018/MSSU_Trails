const expandingCircles = document.querySelectorAll('.expandingCircles');
const imgArr = ["pondTrail", "OvalLoop", "WebsterWalk", "SpivaSprint",
				"TrackTrek", "HearnesHike", "TaylorTrail", "StadiumBreezeway",
				"DormitoryShuffle", "TourDeCampus", "PerimeterRun", "CrossCountryCourse"];
				
const topLeftArr = [[48, 68], [43, 53], [34, 34], [33, 53], [20, 19],
				 [23, 41], [39, 47], [19, 12], [84, 21], [65, 70], [16, 42], 
				 [78, 41.3]];
let i = 0;
expandingCircles.forEach(circle => {
    circle.style.setProperty('--circle-background-image', 'url(' + "../Resources/" + imgArr[i] + ".jpg" + ')');
	circle.style.setProperty('--circle-top-location', topLeftArr[i][0] + '%');
	circle.style.setProperty('--circle-left-location', topLeftArr[i][1] + '%');
	i++;
	
	circle.addEventListener('mouseenter', () => {
        const parentContainer = circle.closest('.circle-container');
        parentContainer.style.zIndex = 3;
        circle.style.zIndex = 3; 
    });
	
	circle.addEventListener('mouseleave', () => {
    const parentContainer = circle.closest('.circle-container');
        setTimeout(() => {
            parentContainer.style.zIndex = 2; 
            circle.style.zIndex = 2; 
        }, 1000); 
    });
});
