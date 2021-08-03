
class AcAdapter extends Dengen{
	private JapaneseConsent consent = new JapaneseConsent();

	@Override
	public int kyuuden() {
		return (int)(consent.power() * 0.16);
	}

}
