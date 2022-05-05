regex = r'(\d\d)(\w)' 
    # O r antes das aspas converte a string em uma raw
    # string, que não permite escape de caracteres.

alvo = '11a22b33c'

import re
# Importa a biblioteca de expressões regulares.

resultado = re.search(regex, alvo) # Retorna apenas o primeiro match.
print(resultado)

print(f"Uma forma de mostrar grupo de match inteiro: {resultado.group()}")
print(f"Outra forma de mostrar grupo de match inteiro: {resultado.group(0)}")
print(f"\t1o grupo de match: {resultado.group(1)}")
print(f"\t2o grupo de match: {resultado.group(2)}")

print("\n")

print(f"Posição inicial do match no alvo: {resultado.start()}")
print(f"Posição final do match no alvo: {resultado.end()}")

print("\n")

print("Buscando todos os matches")
resultados = re.finditer(regex, alvo) # Retorna um iterador.
# Uma vez que esse iterador é executado, ele não pode ser reexecutado.
for resultado in resultados:
    print("\t%s | %s | %s [%s,%s]" % (resultado.group(), resultado.group(1), resultado.group(2), resultado.start(), resultado.end()))


print("\n")

print("Reexecutando o finditer resultados: ")
for resultado in resultados:
    print("\t%s | %s | %s [%s,%s]" % (resultado.group(), resultado.group(1), resultado.group(2), resultado.start(), resultado.end()))

print("\n")

print("Reexecutando o finditer resultados após nova atribuição: ")
resultados = re.finditer(regex, alvo) # Retorna um iterador.
for resultado in resultados:
    print("\t%s | %s | %s [%s,%s]" % (resultado.group(), resultado.group(1), resultado.group(2), resultado.start(), resultado.end()))
