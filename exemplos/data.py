import re

alura = 'Alura - Regex'
regex = r'\s-\s'
novotexto = ': '

print("\nO método sub retorna a string resultante da substituição após aplicar a RegEx.")
resultado = re.sub(regex, novotexto, alura) 

print(resultado)

alvo = '2007-12-31'
regex = r'-'
novotexto = r'/'

resultado = re.sub(regex, novotexto, alvo)
print("\nExibindo o resultado após substituir os hifens por barras.")
print(resultado)


print("\nTestando backreference com Python.")
regex = r'(\d{4})-(\d{2})-(\d{2})'
novotexto = r'\3/\2/\1'

resultado = re.sub(regex, novotexto, alvo)
print(resultado)
