package observer2;

public class JyuurokushinHyouji implements Observer{
	public void update(Subject s) {
		print(((Suuchi)s).getValue());
	}

	private void print(int n) {
		System.out.println(n + "を16進数表示します");
	}

}
