
public class kledingstuk {
	public int maat;
	public String formaat;
	public String kleur;
	public int prijs;
	public String stof;	
	

	public int getMaat() {
		return maat;
	}
	public void setMaat(int maat) {
		this.maat = maat;
	}
	public String getFormaat() {
		return formaat;
	}
	public void setFormaat(String formaat) {
		this.formaat = formaat;
	}
	public String getKleur() {
		return kleur;
	}
	public void setKleur(String kleur) {
		this.kleur = kleur;
	}
	public int getPrijs() {
		return prijs;
	}
	public void setPrijs(int prijs) {
		this.prijs = prijs;
	}
	public String getStof() {
		return stof;
	}
	public void setStof(String stof) {
		this.stof = stof;
	}

	public void showEigenschappenKledingstuk() 
	{
		System.out.println(
				"Maat = " + maat + " Formaat = " + formaat + " Kleur = " + kleur + " Prijs = " + prijs + " Stof = " + stof );

	}

}
