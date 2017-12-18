function highschoolThrowback(coefficients) {
var a = coefficients[0];
var b = coefficients[1];
var c = coefficients[2];
var d=[];
    
if(a<0){
    a=a*(-1);b=(b)*(-1);c=(c)*(-1);
}
discriminant = (b*b - 4*a*c);
d[0] = Math.round(100*((-b - Math.sqrt(discriminant))/(2*a)))/100;
d[1] = Math.round(100*((-b + Math.sqrt(discriminant))/(2*a)))/100;
    
return d.filter((v, i, a) => a.indexOf(v) === i);
}
