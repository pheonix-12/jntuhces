#include<stdlib.h>
#include<stdio.h>
#include<string.h>
void main()
{
char str[100];
scanf("%s",str);
char str1[11];
int i,len;
len=strlen(str);
for(i=0;i<len;i++)
{
str1[i]=str[i]^0;
printf("%c",str1[i]);
}
printf("\n");
}
