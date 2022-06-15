//linked list
class LinkedList{
	consturctor(){
		this.head = this.tail = null;
	}
	
	//append to end of list / tail
	append(value){

		if(!this.tail){
			this.head = this.tail = new Node(value);
		}
		else{
			let oldTail = this.tail;
			this.tail = new Node(value);
			oldTail.next = this.tail;
			this.tail.prev = oldTail;
		}
	}	
		//add at beginning of list / head
	prepend(value){
			//if list is empty
		if(!this.head){
			this.head = this.tail = new Node(value)
		}
		else{
			let oldHead = this.head;
			this.head = new Node(value);
			oldHead.prev = this.head;
			this.head.next = oldHead;


		}
	}

	/*delete(){

	}*/

	deleteHead(){
		if(!this.head){
			return null;
		}
		else{

			let removeHead = this.head;
			//if 1 node left
			if(this.head === this.tail){
				this.head = this.tail = null;
			}else{
				this.head = this.head.next;
				this.head.prev = null;
			}
			return removeHead.value
		}
	}

	deletelTail(){
		//if list is empty
		if(!this.tail){
			return null;
		}
		else{
			let removedTail = this.tail;
			//if 1 node left
			if(this.head === this.tail){
				this.head = this.tail = null;
			}else{
				this.tail = this.tail.prev
				this.tail.next = null
			}
			return removedTail.value;
		}

	}

	search(value){
		let currentNode = this.head;

		while(currentNode){
			if(currentNode.value === value){
				return currentNode;
			}
			currentNode = currentNode.next;
		}
		return null;
	}
}

class Node{
	
	constructor(value, prev, next){
	this.value = value;
	this.prev = prev || null; //sets a deafult value of null is the prev value is not given, same for next.
	this.next = next || null;
	}
}

let list = new LinkedList();
list.append(1);
list.append(2);
list.append(3);
