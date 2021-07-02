
public class adres {
	
	
		private String straatNaam;
		private int huisnummer;
		private String toevoeging;
		
		
		
		
		
		public adres(String straatNaam, int huisnummer) {
			super();
			this.straatNaam = straatNaam;
			this.huisnummer = huisnummer;
		}

		public String getStraatNaam() {
			return straatNaam;
		}
		
		public void setStraatNaam(String straatNaam) {
			this.straatNaam = straatNaam;
		}
		
		public int getHuisnummer() {
			return huisnummer;
		}
		
		public void setHuisnummer(int huisnummer) {
			this.huisnummer = huisnummer;
		}
		
		public String getToevoeging() {
			return toevoeging;
		}
		
		public void setToevoeging(String toevoeging) {
			this.toevoeging = toevoeging;
		}
}
