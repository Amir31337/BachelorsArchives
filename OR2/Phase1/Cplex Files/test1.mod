/*********************************************
 * OPL 12.10.0.0 Model
 * Author: Amir
 * Creation Date: Mar 31, 2021 at 12:25:51 PM
 *********************************************/
//miangin hazine tamase manategh

range i=1..8;
range j=1..7;

float TE_Cost[i]=...;
float MA_Cost[i]=...;
float SH_Cost[i]=...;
float ES_Cost[i]=...;
float AR_Cost[i]=...;
float EI_Cost[i]=...;
float TB_Cost[i]=...;

//dastmozt har shahr

int TE_Salary=...;
int MA_Salary=...;
int SH_Salary=...;
int ES_Salary=...;
int AR_Salary=...;
int EI_Salary=...;
int TB_Salary=...;

//hazine sakht manategh

float TE_FirstC=...;
float MA_FirstC=...;
float SH_FirstC=...;
float ES_FirstC=...;
float AR_FirstC=...;
float EI_FirstC=...;
float TB_FirstC=...;

//tedad tamas saliane

int N_CallNo=...;
int S_CallNo=...;
int E_CallNo=...;
int W_CallNo=...;
int NW_CallNo=...;
int NE_CallNo=...;
int SW_CallNo=...;
int SE_CallNo=...;

//moteghaier tasmim

dvar int+ TE[i];
dvar int+ MA[i];
dvar int+ SH[i];
dvar int+ ES[i];
dvar int+ AR[i];
dvar int+ EI[i];
dvar int+ TB[i];

dvar boolean Y[j];

//tabee hadaf

minimize (
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.9*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.81*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.729*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.6561*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.59049*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.531441*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.4782969*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.43046721*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
0.387420489*
(
(TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8])*4/60*TE_Salary+
(MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8])*4/60*MA_Salary+
(SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8])*4/60*SH_Salary+
(ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8])*4/60*ES_Salary+
(AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8])*4/60*AR_Salary+
(EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8])*4/60*EI_Salary+
(TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8])*4/60*TB_Salary
)+
(
TE[1]*TE_Cost[1]+TE[2]*TE_Cost[2]+TE[3]*TE_Cost[3]+TE[4]*TE_Cost[4]+TE[5]*TE_Cost[5]+TE[6]*TE_Cost[6]+TE[7]*TE_Cost[7]+TE[8]*TE_Cost[8]+
MA[1]*MA_Cost[1]+MA[2]*MA_Cost[2]+MA[3]*MA_Cost[3]+MA[4]*MA_Cost[4]+MA[5]*MA_Cost[5]+MA[6]*MA_Cost[6]+MA[7]*MA_Cost[7]+MA[8]*MA_Cost[8]+
SH[1]*SH_Cost[1]+SH[2]*SH_Cost[2]+SH[3]*SH_Cost[3]+SH[4]*SH_Cost[4]+SH[5]*SH_Cost[5]+SH[6]*SH_Cost[6]+SH[7]*SH_Cost[7]+SH[8]*SH_Cost[8]+
ES[1]*ES_Cost[1]+ES[2]*ES_Cost[2]+ES[3]*ES_Cost[3]+ES[4]*ES_Cost[4]+ES[5]*ES_Cost[5]+ES[6]*ES_Cost[6]+ES[7]*ES_Cost[7]+ES[8]*ES_Cost[8]+
AR[1]*AR_Cost[1]+AR[2]*AR_Cost[2]+AR[3]*AR_Cost[3]+AR[4]*AR_Cost[4]+AR[5]*AR_Cost[5]+AR[6]*AR_Cost[6]+AR[7]*AR_Cost[7]+AR[8]*AR_Cost[8]+
EI[1]*EI_Cost[1]+EI[2]*EI_Cost[2]+EI[3]*EI_Cost[3]+EI[4]*EI_Cost[4]+EI[5]*EI_Cost[5]+EI[6]*EI_Cost[6]+EI[7]*EI_Cost[7]+EI[8]*EI_Cost[8]+
TB[1]*TB_Cost[1]+TB[2]*TB_Cost[2]+TB[3]*TB_Cost[3]+TB[4]*TB_Cost[4]+TB[5]*TB_Cost[5]+TB[6]*TB_Cost[6]+TB[7]*TB_Cost[7]+TB[8]*TB_Cost[8] 
)
+
Y[1]*1000000*TE_FirstC+
Y[2]*1000000*MA_FirstC+
Y[3]*1000000*SH_FirstC+
Y[4]*1000000*ES_FirstC+
Y[5]*1000000*AR_FirstC+
Y[6]*1000000*EI_FirstC+
Y[7]*1000000*TB_FirstC
;

//mahdodiat

subject to{
 
//mahdoodiat tamas salane 
TE[1] + MA[1] + SH[1] + ES[1] + AR[1] + EI[1] + TB[1] == N_CallNo;
TE[2] + MA[2] + SH[2] + ES[2] + AR[2] + EI[2] + TB[2] == S_CallNo;
TE[3] + MA[3] + SH[3] + ES[3] + AR[3] + EI[3] + TB[3] == E_CallNo;
TE[4] + MA[4] + SH[4] + ES[4] + AR[4] + EI[4] + TB[4] == W_CallNo;
TE[5] + MA[5] + SH[5] + ES[5] + AR[5] + EI[5] + TB[5] == NW_CallNo;
TE[6] + MA[6] + SH[6] + ES[6] + AR[6] + EI[6] + TB[6] == NE_CallNo;
TE[7] + MA[7] + SH[7] + ES[7] + AR[7] + EI[7] + TB[7] == SW_CallNo;
TE[8] + MA[8] + SH[8] + ES[8] + AR[8] + EI[8] + TB[8] == SE_CallNo;

//SEFROYEK
TE[1]+TE[2]+TE[3]+TE[4]+TE[5]+TE[6]+TE[7]+TE[8] <= 1250000*Y[1];
MA[1]+MA[2]+MA[3]+MA[4]+MA[5]+MA[6]+MA[7]+MA[8] <= 1250000*Y[2];
SH[1]+SH[2]+SH[3]+SH[4]+SH[5]+SH[6]+SH[7]+SH[8] <= 1250000*Y[3];
ES[1]+ES[2]+ES[3]+ES[4]+ES[5]+ES[6]+ES[7]+ES[8] <= 1250000*Y[4];
AR[1]+AR[2]+AR[3]+AR[4]+AR[5]+AR[6]+AR[7]+AR[8] <= 1250000*Y[5];
EI[1]+EI[2]+EI[3]+EI[4]+EI[5]+EI[6]+EI[7]+EI[8] <= 1250000*Y[6];
TB[1]+TB[2]+TB[3]+TB[4]+TB[5]+TB[6]+TB[7]+TB[8] <= 1250000*Y[7];

}




