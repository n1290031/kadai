import javax.security.auth.*;

public class SubtractionDisplay implements TimeAdmin{
	private int countDownValue = 10000;
	public void update(Subject subject) {
		countDownValue = countDownValue - 1;
		System.out.print(countDownValue);
	}

}
