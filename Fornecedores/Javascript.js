function mostraDiv(valor)
{
    document.getElementById("divCNPJ").style.display = "none";
    document.getElementById("divIE").style.display = "none";
    document.getElementById("divCI").style.display = "none";
    if (valor === "2")
    {
        document.getElementById("divCNPJ").style.display = "block";
        document.getElementById("divIE").style.display = "block";
        document.getElementById("divCI").style.display = "none";
    } else if (valor === "1")
    {
        document.getElementById("divCNPJ").style.display = "none";
        document.getElementById("divIE").style.display = "none";
        document.getElementById("divCI").style.display = "block";
    }

}