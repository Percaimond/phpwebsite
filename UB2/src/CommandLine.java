import java.util.Scanner;
import java.io.Console;


public class CommandLine {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);
        System.out.println("Welcome to the library management command line");
        System.out.println("Choose your options: \n 1: Search for User \n 2: Search for Book \n 3: Other");
        String options = scanner.nextLine();

        switch (options){
            case "1":
                System.out.println("Insert keywords");
                break;
            case "2":
                break;
            case "3":
                break;

        }
    }


}
