sets
i states /NY,AZ,CA,FL,GA,IL,KY,MD,MS,NV,LA/
J regions /region1,region2,region3,region4,region5/
k size of centers in regions /small,medium,large/;
parameters
m(k) maximum meghdar pardakhti ke centers mitavanand az states begirand /small 2, medium 3,large 4/;
parameter Days(i,j) farakhani sheete <days> az file excel;
$call gdxxrw.exe C:/Users/user/Documents/gamsdir/projdir/Phase2.xlsx par=Days Rng = Days!A1:F12 rdim=1 cdim=1
$gdxin Phase2.gdx
$load Days
$gdxin
;
parameter numberofcredits(i) farakhani sheete <number of credits> az file excel;
$call gdxxrw.exe C:/Users/user/Documents/gamsdir/projdir/Phase2.xlsx par=numberofcredits Rng =numberofcredits!A1:B12 rdim=1
$gdxin Phase2.gdx
$load numberofcredits
$gdxin
;
parameter costofbuild(j,k) farakhani sheete <cost of build> az file excel;
$call gdxxrw.exe C:/Users/user/Documents/gamsdir/projdir/Phase2.xlsx par=costofbuild Rng = costofbuild!A1:d6 rdim=1 cdim=1
$gdxin Phase2.gdx
$load costofbuild
$gdxin
;
parameter interestrate(j) farakhani sheete <interest rate> az file excel;
$call gdxxrw.exe C:/Users/user/Documents/gamsdir/projdir/Phase2.xlsx par=interestrate Rng = interestrate!A1:F2 cdim=1
$gdxin Phase2.gdx
$load interestrate
$gdxin

variables
z tabe hadaf;
binary variables
y(i,j) dar soorati ke az state i be region j pardakhti ersal shavad meghdare 1 migirad va dar gheyre in soorat meghdare 0 migirad
w(j,k) dar soorati ke maghdare 1 begirad be in ma'nast ke dar region j andaze center k mibashad ;
equation
lost_profits meghdar soode az dast rafte
states(i) mahdoodiate in ke az har state faghat be 1 region pardakhti ersal mishavad
regions(j) mahdoodiate in ke dar har region maximum 1 center mitavan sakht
centers(j) mahdoodiat in ke small centers va medium centers va large centers be tartib maximum 2 va 3 va 4 meghdar daryafti az states mitavanand dashte bashand ;
lost_profits..z=e=sum((i,j),Days(i,j)*numberofcredits(i)*interestrate(j)*y(i,j))+sum((j,k),costofbuild(j,k)*w(j,k));
states(i)..sum(j,y(i,j))=e=1;
regions(j)..sum(k,w(j,k))=l=1;
centers(j)..sum(i,y(i,j))=l=sum(k,m(k)*w(j,k));
model main/all/;
solve main using MIP minimizing Z ;
display y.l,y.m,w.l,w.m,Z.l;

execute_unload"phase2.gdx" z, y , w;
execute'gdxxrw.exe phase2.gdx var=z rng=z!b2'
execute'gdxxrw.exe phase2.gdx var=y rng=y!b2'
execute'gdxxrw.exe phase2.gdx var=w rng=w!b2'

