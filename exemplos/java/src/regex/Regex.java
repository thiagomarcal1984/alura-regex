package regex;
import java.util.regex.Pattern;
import java.util.regex.Matcher;

// Como compilar:
/**
 * 1) Crie uma pasta src;
 * 2) Dentro de src, crie uma pasta/subpasta com o nome do pacote (no caso, regex);
 * 3) Crie a classe e o método main (neste caso, Regex.java). Lembre-se
 *    que a estrutura de pastas deve corresponder à do pacote declarado;
 * 4) Compile cada classe com o comando: javac regex\Regex.java. Aprenda sobre
 *    classpath, pra não precisar entrar em cada pasta e compilar.
 * 5) Execute o bytecode com o comando: java regex.Regex.
 */

public class Regex {
    public static void main(String[] args) {
        Pattern pattern = Pattern.compile("(\\d\\d)(\\w)"); 
        // Java exige o escape de barras inversas.

        String alvo = "11a22b33c";
        Matcher matcher = pattern.matcher(alvo);

        // boolean encontrou = matcher.find(); 
        
        while (matcher.find()) { // Retorna um boolean.
            String match = matcher.group();
            String group1 = matcher.group(1);
            String group2 = matcher.group(2);

            int start = matcher.start();
            int end = matcher.end();

            System.out.printf("%s %s %s [%d,%d]%n", match, group1, group2, start, end);
        }
    }
}
