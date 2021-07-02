
public class Trui extends kledingstuk
{
	
	public int Lengte;

	public int getLengte() {
		return Lengte;
	}

	public void setLengte(int lengte) {
		Lengte = lengte;
	} 
	
	public void showTruiEigenschappen()
	{
		System.out.println
		(
			"De lengte van de trui is " + Lengte + " cm."
		);
	}

}
