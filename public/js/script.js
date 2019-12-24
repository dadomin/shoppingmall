Number.prototype.timeFormat = function() {
	let min = ~~(this / 60);
	let sec = ~~(this % 60);

	return `${String(min).padStart(2, 0)}:${String(sec).padStart(2, 0)}`;
}

class App {
	constructor(){
		$("#open-all").on("click",()=>{
			$("#all-ca").css({
				"visibility" : "visible",
				"opacity" : "1"
			});
		})
		$("#close-all").on("click", ()=>{
			$("#all-ca").css({
				"visibility" : "hidden",
				"opacity" : "0"
			});
		});
	}
}

window.onload = function(){
	let app = new App();
}