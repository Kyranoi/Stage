
public class persoon {
	
	private String voornaam;
	private String achternaam;
	private adres Adres;
	
	
	
	
	public persoon(String voornaam, String achternaam) {
		super();
		this.voornaam = voornaam;
		this.achternaam = achternaam;
	}

	public String getVoornaam() {
		return voornaam;
	}
	
	public void setVoornaam(String voornaam) {
		this.voornaam = voornaam;
	}
	
	public String getAchternaam() {
		return achternaam;
	}
	
	public void setAchternaam(String achternaam) {
		this.achternaam = achternaam;
	}

	public adres getAdres() {
		return Adres;
	}

	public void setAdres(adres adres) {
		this.Adres = adres;
	}
	
	

}
