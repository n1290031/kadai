import javax.security.auth.*;

public class CuckooClock implements TimeAdmin{
	public void update(Subject subject) {
	((concreteSubject)subject).getHour();

	for(int i=0; i<subject; i++) {
		System.out.print("ぽっぽー！");
	}
	}


}
