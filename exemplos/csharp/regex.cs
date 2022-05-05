// Como rodar código C# no VS Code: https://docs.microsoft.com/pt-br/dotnet/core/tutorials/with-visual-studio-code?pivots=dotnet-6-0

/** 
1: Crie o console com o seguinte comando: 
    dotnet new console --framework net6.0
2. Edite o arquivo Program.cs
3. Rode o arquivo com o comando: 
    dotnet run .\arquivo.cs
*/


using System;
using System.Text;
using System.Text.RegularExpressions;

namespace HelloWorld
{
    class Program
    {
        static void Main(string[] args) // Método Main deve ser maiúsculo.
        {
            string alvo = "11a22b33c";
            string pattern = "(\\d\\d)(\\w)"; // O C# exige o escape desta forma...
            pattern = @"(\d\d)(\w)"; // ... a não ser se você usar o @ antes.

            Regex regex = new Regex(pattern);
            Match match = regex.Match(alvo);

            Console.WriteLine("Valor: " + match.Value); // Retorna o match inteiro.
            Console.WriteLine("Índice inicial: " + match.Index); // Retorna o índice do match.
            Console.WriteLine("Comprimento: " + match.Length); // Retorna o índice do match.

            Console.WriteLine();
            Console.WriteLine("Mostrando os valores de cada grupo. ");
            Console.WriteLine("Valor do Grupo 0: " + match.Groups[0].Value);
            Console.WriteLine("Valor do Grupo 1: " + match.Groups[1].Value);
            Console.WriteLine("Valor do Grupo 2: " + match.Groups[2].Value);

            Console.WriteLine();
            Console.WriteLine("Para capturar várioes matches, use regex.Matches(alvo).");

            MatchCollection matches = regex.Matches(alvo);
            foreach (Match matching in matches) {
                Console.WriteLine("Valor do Grupo 0: " + matching.Groups[0].Value);
                Console.WriteLine("Valor do Grupo 1: " + matching.Groups[1].Value);
                Console.WriteLine("Valor do Grupo 2: " + matching.Groups[2].Value);
                Console.WriteLine("Índice inicial: " + matching.Index);
                Console.WriteLine("Comprimento: " + matching.Length);
                Console.WriteLine();

                data();
            }

            static void data()
            {
                {
                    string alvo = "2007-12-31";
                    string pattern = @"(\d\d\d\d)-(\d\d)-(\d\d)";

                    Regex regex = new Regex(pattern);
                    Match match = regex.Match(alvo);

                    string resultado = string.Format(
                        "{0}/{1}/{2}",
                        match.Groups[3].Value,
                        match.Groups[2].Value,
                        match.Groups[1].Value
                    );

                    Console.WriteLine();
                    Console.WriteLine("Reformatando a data " +  alvo + ": ");
                    Console.WriteLine("Resultado: " + resultado);

                    // Usando o replaceAll.

                    Console.WriteLine("Substituindo hifens por barras no alvo: " + alvo.Replace("-", "/"));
            }
        }
       }
    }
}