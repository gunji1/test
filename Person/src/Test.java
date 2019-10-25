
public class Test {

	public static void main(String[] args){
		person kimura = new person();
		person suzuki = new person();
		kimura.name="木村次郎";
		kimura.age=18;
		kimura.phoneNumber="090";
		kimura.address="東京都";
		suzuki.name="鈴木花子";
		suzuki.age=16;
		suzuki.phoneNumber="080";
		suzuki.address="神奈川県";

		System.out.println(kimura.name);
		System.out.println(kimura.age+"歳");
		System.out.println(kimura.phoneNumber);
		System.out.println(kimura.address);
		kimura.run();
		kimura.walk();
		kimura.talk();
		System.out.println(suzuki.name);
		System.out.println(suzuki.age+"歳");
		System.out.println(suzuki.phoneNumber);
		System.out.println(suzuki.address);
		suzuki.run();
		suzuki.walk();
		suzuki.talk();
	}
}
