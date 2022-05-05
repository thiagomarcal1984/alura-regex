import re

regex = re.compile(r'(\d\d)(\w)')
alvo = '11a22b33c'

resultado = re.findall(regex, alvo)

print(resultado)
# Saída esperada: [('11', 'a'), ('22', 'b'), ('33', 'c')]
# Um dicionário com 3 tuplas com dois elementos. 
# Cada tupla é um match. Cada match tem seus grupos.

print('\n')
print('Concatenando os resultados: ')

for grupo in resultado:
    print('%s%s' % (grupo[0], grupo[1]))