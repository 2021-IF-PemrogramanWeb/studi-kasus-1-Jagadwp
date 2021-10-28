// REf
// http://stackoverflow.com/questions/40061862/chart-js-update-bars-of-a-bar-chart

var canvas = document.getElementById("barChart");
var ctx = canvas.getContext("2d");
var chartType = "bar";
var myBarChart;

var data = {
	labels: ["2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016"],
	datasets: [
		{
			label: "UFO Sightings",
			fill: true,
			lineTension: 0.1,
			backgroundColor: "rgba(0,255,0,0.4)",
			borderColor: "green", // The main line color
			borderCapStyle: "square",
			pointBorderColor: "white",
			pointBackgroundColor: "green",
			pointBorderWidth: 1,
			pointHoverRadius: 8,
			pointHoverBackgroundColor: "yellow",
			pointHoverBorderColor: "green",
			pointHoverBorderWidth: 2,
			pointRadius: 4,
			pointHitRadius: 10,
			data: [10, 13, 17, 12, 30, 47, 60, 120, 230, 300, 310, 400],
			spanGaps: true,
		},
	],
};

var options = {
	scales: {
		yAxes: [
			{
				ticks: {
					beginAtZero: true,
				},
			},
		],
	},
	title: {
		fontSize: 18,
		display: true,
		text: "I want to believe !",
		position: "bottom",
	},
};

init();

function init() {
	// Chart declaration:
	myBarChart = new Chart(ctx, {
		type: chartType,
		data: data,
		options: options,
	});

}

function addData() {
	myBarChart.data.labels[12] = "2017";
	myBarChart.data.labels[13] = "2018";
	myBarChart.data.datasets[0].data[12] = 500;
	myBarChart.data.datasets[0].data[13] = 600;
	myBarChart.update();
}

function adjust2016() {
	myBarChart.data.datasets[0].data[11] = 300;
	myBarChart.update();
}
