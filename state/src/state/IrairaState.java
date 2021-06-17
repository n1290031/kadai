package state;

public class IrairaState extends DogState{
	private static IrairaState s = new IrairaState();
	private IrairaState() {}

	public static DogState getInstace() {
		return s;
	}

	public void tukareta(Dog moto) {
		moto.changeState(NeteruState.getInstace());
	}
	public void tabeta(Dog moto) {
		moto.changeState(TanoshiiState.getInstace());
	}
	public String toString() {
		return "イライラ状態";
	}


}
