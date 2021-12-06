#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(){
    float numero, quadrado;

    printf("informe um numero real: \n");
    scanf("%f", &numero);

    quadrado = pow(numero, 2);
    printf("o resultado será: %f \n", quadrado);

    return 0;

}