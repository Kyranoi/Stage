import java.util.Scanner;
public class Voorbereiding {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		String antwoord;
		Scanner input = new Scanner (System.in);
		
		System.out.println("Wat is uw naam?");
		
		antwoord = input.nextLine();
		
		if(antwoord.equals("Fred")) {
			//Antwoord is Fred
			verwerkNaamIsFred();
		} else {
		//Antwoord is anders dan Fred
			verwerkNaamAndersDanFred();
	}
		//Dit gebeurd altijd 
		bedankt();

}
	
	public static void verwerkNaamIsFred() { 
		System.out.println("De naam is Fred");
	}
	
	public static void verwerkNaamAndersDanFred() {
		System.out.println("Naam anders dan Fred");
	}
	public static void bedankt() { 
		System.out.println("Bedankt voor uw medewerking.");
	}
}