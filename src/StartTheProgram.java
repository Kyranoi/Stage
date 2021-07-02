
public class StartTheProgram {

	public static void main(String[] args) {
		
		
		persoon testPersoon1 = new persoon("Kyran", "Idowu");
		persoon testPersoon2 = new persoon("Jaeden", "Idwou");
		
		adres testAdres1 = new adres("Landsmeerplantsoen", 32);
		testAdres1.setToevoeging("B");
		
		testPersoon1.setAdres(testAdres1);
		
		System.out.println("De voornaam = " + testPersoon1.getVoornaam() + " en de straatnaam is " + testPersoon1.getAdres().getStraatNaam() + " Nummer " + testPersoon1.getAdres().getHuisnummer());
		
		
	}

}
