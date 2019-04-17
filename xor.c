#include<stdlib.h>
#include<stdio.h>
#include<string.h>
void main()
{
	charstr[]="Hello World";
	char str1[11];
	inti,len;
	len=strlen(str);
	printf("string is\n");
	for(i=0;i<len;i++)
	{
		printf(" %c",str[i]);
	}
	printf("\nafter XOR\n");
	for(i=0;i<len;i++)
	{
		str1[i]=str[i]^1;
		printf("%c",str1[i]);
	}
	printf("\n");
}
