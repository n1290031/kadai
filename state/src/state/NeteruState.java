package state;

public class NeteruState extends DogState{
	private static NeteruState s = new NeteruState();
	private NeteruState() {}

	public static DogState getInstace() {
		return s;
	}

	public void tukareta(Dog moto) {
		//何もしない
	}
	public void tabeta(Dog moto) {
		//何もしない
	}
	public String toString() {
		return "寝てる状態";
	}

}
