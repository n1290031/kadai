package state;

class Dog {
	private DogState myState;

	public Dog() {
		myState = TanoshiiState.getInstace();
	}
	public void roudou() {
		myState.tukareta(this);
	}
	public void shokuji() {
		myState.tabeta(this);
	}
	public void changeState(DogState d) {
		myState = d;
	}

	public void print() {
		System.out.print("現在私は「");
		System.out.print(myState.toString());
		System.out.println("」です。");
	}

}
