#include <18F4550.h>
#DEVICE *=16 ADC=10
#device PASS_STRINGS = IN_RAM 
#fuses HSPLL,MCLR,NOWDT,NOPROTECT,NOLVP,NODEBUG,USBDIV,PLL5,CPUDIV1,VREGEN                 
#use delay(clock=48000000) 

#use rs232(parity=N,xmit = PIN_D4, rcv = PIN_C4, baud = 9600,stream=UART1)
#use rs232(baud=9600,parity=N,xmit=PIN_C6,rcv=PIN_C7,bits=8,stream=UARTSIM) 
#INCLUDE <stdlib.h>
#include "TV_1wire.c"
#include "TV_ds1820.c"
