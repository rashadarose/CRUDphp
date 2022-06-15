const airports = 'PHX BKK OKC JFK LAX MEX EZE HEL LOS LAP LIM'.split(' ');
const routes = [
	['PHX', 'LAX'],
	['PHX', 'JFK'],
	['JFK', 'OKC'],
	['JFK', 'HEL'],
	['JFK', 'LOS'],
	['MEX', 'LAX'],
	['MEX', 'BKK'],
	['MEX', 'LIM'],
	['MEX', 'EZE'],
	['LIM', 'BKK'],
];

//the Graph

const adjacencyList = new Map();

function addNode(airport){
	adjacencyList.set(airport, []);
}

function addEdge(origin, destination){
	adjacencyList.get(origin).push(destination);
	adjacencyList.get(destination).push(origin);
}


//bfs get to BKK
function bfs(start){
	 const visited = new Set();
     const queue = [start];
	while(queue.length > 0 ){

		const airport = queue.shift(); // mutates the queue
		const destinations = adjacencyList.get(airport);

		for(const destination of destinations){
			

			if(destination === 'BKK'){
				console.log('found it ' + airport +' flies to ' + destination);
				
			}

			if(!visited.has(destination)){
				visited.add(destination);
				queue.push(destination);
				console.log(destination);
		    }
	}
  }
}

function dfs(start, visited = new Set()){
	console.log(start);
	visited.add(start);
	const destinations = adjacencyList.get(start);

	for(const destination of destinations){

		if(destination === 'BKK'){
			console.log(`DFS found bankok in steps`);
			return;

		}
		if(!visited.has(destination)){
			dfs(destination, visited);

		}


	}

}


//create graph

airports.forEach(addNode);
routes.forEach(route => addEdge(...route));
console.log(adjacencyList);
bfs('PHX');
dfs('PHX');