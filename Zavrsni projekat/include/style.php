<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap');

    body,
    body * {
        margin: 0;
        padding: 0;
    }

    #naslov {
        color: #457b9d;
        text-align: left;
        padding: 0;
        padding-left: 14px;
        text-decoration: none;
        font-size: 40px;
        margin: 0;
        margin-top: 7px;
        font-weight: bold;
        font-family: 'Open Sans', sans-serif;
        /* font-style: italic; */
    }

    .topnav {
        background-color: #1d3557;
        overflow: hidden;
        margin: 0;
        width: 71%;
        /* border-bottom: 1px solid #2a9d8f;
        border-top: 1px solid #2a9d8f; */
        margin-right: 21%;

    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 25px;
        text-decoration: none;
        font-size: 17px;
    }

    h1 a {
        text-decoration: none;
        color: inherit;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }



    #deo_naslova {
        font-size: 26px;
        vertical-align: baseline;
        color: #264653;
    }

    #registracija,
    #login {
        width: 40px;
        height: 40px;
        margin-right: 18px;
        padding-top: 5px;
    }


    #prijava,
    #text_korpa {
        font-size: 18px;
        font-weight: bolder;
        color: #457b9d;
        text-align: left;
        text-decoration: none;
        margin-right: 18px;
        padding-top: 15px;
        border-right: #264653 solid 4px;

    }

    #prijava:hover {
        color: #e63946;
    }

    #text_korpa:hover {
        color: #e63946;
    }

    .naslov_grid {
        float: right;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        text-align: center;
        width: 28%;
        grid-template-columns: 15% 35% 15% 35%;
        padding-top: 3px;

    }

    #login {
        grid-area: 1 / 1 / 2 / 5;
    }

    #prijava {
        grid-area: 1 / 2 / 2 / 3;
    }

    #registracija {
        grid-area: 1 / 3 / 2 / 4;
    }

    #text_korpa {
        grid-area: 1 / 4 / 2 / 5;
    }

   

    #pocetna_slika {
        padding: 0;
        margin: 0;
        height: 450px;
        width: 99%;
        background-image: url("slike/pas_macka.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        margin-top: 12px;
        overflow: hidden;
        padding-left: 20px;
        padding-top: 30px;
    }

    #podnaslov {
        font-size: 40px;
        color: white;
        font-weight: bold;
    }

    #podrecenica {
        color: #457b9d;
        font-size:1.2em;
        font-weight: bold;
        background-color: white;
        margin-top: 15px;
    }


    .ispod_main_slike {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        margin-top: 12px;
        
    }

    .ispod_main_slike div {
        padding-left: 0;
        margin-left: 12px;
        margin-right: 12px;
        height: 350px;
        width: 97%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        position: relative;
        border-radius: 6px;
        margin-bottom: 5%;

    }

    .div_slika1 {
        grid-area: 1 / 1 / 2 / 2;
        background-image: url("slike/pas_macka3.jpg");

    }

    .div_slika2 {
        grid-area: 1 / 2 / 2 / 3;
        background-image: url("slike/pas_macka20.jpg");

    }

    .div_slika3 {
        grid-area: 1 / 3 / 2 / 4;
        background-image: url("slike/macka 3.png");
        margin-right: 0;
        position: ;
    }

    .div_slika3 .u_divu {
        width: 35%;
    }

    .ispod_main_slike p {
        margin: 10px 0 0 10px;
        width: 40%;
        padding: 5%;
        background-color: #edf2f480;
        font-weight: bold;
        color: darkslategray;
        padding-right: 0;
        font-size: 0.9em;
        border-radius: 12px;
    }

    .ispod_main_slike button {
        margin-top: 6%;
        margin-left: 0;
    }

        .podnaslov {
            text-align: center;
            display: block;
            font-family: 'Poppins', sans-serif;
            color: #e76f51;
            margin-bottom: 0;
            font-size: 1.2em;
        }

        .podnaslov_h1 {
            color: #1d3557;
            text-align: center;
            clear: both;
        }

        .podnaslov_podnaslov {
            color: #8d99ae;
            margin-bottom: 0 !important;
        }

        .prikaz_ljubimca {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
            /* background-color:red; */
            width: 100%;
            height: 80%;
            /* border:solid 1px red; */
            margin: 0;
            padding: 0;
            margin-top: 0;
        }

        .prikaz_ljubimca div {
            height: 66vh;
            /* border: 2px solid #1d3557; */
            border-radius: 6px;
            margin: 15px;
            margin-bottom: 0;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: 'Poppins', sans-serif;
            padding-left: 5px;
        }

        .prikaz_ljubimca p {
            margin: 60% 0 0 10px;
            width: 42%;
            padding: 5%;
            background-color: #edf2f498;
            font-weight: bold;
            color: #e63946;
            padding-right: 0;
            font-size: 0.9em;
            border-radius: 12px;

        }

        .prikaz_ljubimca p button {
            background-color: #1d3557;
            color: white;
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
            border-radius: 12px;
            padding: 10px;
            border: none;
            text-align: center;
        }

        .div1 {
            grid-area: 1 / 1 / 2 / 2;
        }

        .div2 {
            grid-area: 1 / 2 / 2 / 3;
        }

        .div3 {
            grid-area: 1 / 3 / 2 / 4;
        }

        .div4 {
            grid-area: 2 / 1 / 3 / 2;
        }

        .div5 {
            grid-area: 2 / 2 / 3 / 3;
        }

        .div6 {
            grid-area: 2 / 3 / 3 / 4;
        }

        .div7 {
            grid-area: 3 / 1 / 4 / 2;
        }

        .div8 {
            grid-area: 3 / 2 / 4 / 3;
        }

        .div9 {
            grid-area: 3 / 3 / 4 / 4;
        }

        #div1,
        #div2,
        #div3 {
            margin-top: 12px;
        }

        /* .prikaz_ljubimca #div6 p {
        width: 45%;
    } */

        .prikaz_ljubimca a {
            text-decoration: none;
            color: white;

        }

        #div2 p,
        #div5 p,
        #div8 p {
            margin-left: 25%;
            text-align: center;
            padding: 5%;
        }

        #div3,
        #div6,
        #div9 {
            padding-right: 5%;
        }

        #div3 p,
        #div6 p,
        #div9 p {
            margin-left: 50%;
            text-align: right;
            padding-right: 5%;
            margin-top: 63%;
        }

        #div7,
        #div8,
        #div9 {
            margin-bottom: 12px;
        }

        .ime_ljubimca {
            font-size: 40px;
        }
        .galerija {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }


    .galerija div {
        height: 33vh;
        /* border: 2px solid #1d3557; */
        margin: 6px;
        margin-top: 12px;
        margin-bottom: 0;
        background-size: cover;
        background-position: center;
    }
    

    #contact {
        margin-bottom: 0;
        padding: 6%;
        padding-top: 0;
    }

    #contact .numbering {
        color: #E63946;
    }

    #contact h1,
    h2 {
        text-align: center;
        color: #E63946;
    }

    #contact h2 {
        color: #f1faee;
    }

    #contact #contact_form {
        float: left;
        margin-top: 6%;
        width: 40%;
    }

    #contact input,
    textarea {
        width: 100%;
    }

    #contact legend {
        font-size: 2.4EM;
        color: #8d99ae;
        font-weight: bold;
        margin-bottom: 40px;
        text-align: center;
        font-family: 'Poppins', sans-serif;

    }

    form input,
    textarea,
    ::placeholder {
        padding: 10px;
        color: #457b9d;
        background-color: transparent;
        border: none;
        border-bottom: solid 2px #8d99ae;
        font-size: 1.2em;
        margin-bottom: 1em;
        padding-top: 20px;
        font-family: 'Poppins', sans-serif;

    }

    #message {
        margin-left: 0;
        margin-right: 0;
        padding-left: 0;
        padding-right: 0;
        width: 103%;
        height: 200px;
        padding-top: 0;
        font-family: 'Poppins', sans-serif;

    }

    #contact_info {
        float: right;
        text-align: center;
        font-size: 1.5em;
        margin-top: 50px;
        width: 40%;
        padding-bottom: 0;
        font-family: 'Poppins', sans-serif;


    }

    #contact_info legend {
        font-size: 1.6em;
        margin-bottom: 5%;
        font-family: 'Poppins', sans-serif;


    }

    div#contact_info p .contact_white {
        color: #E63946;
        font-size: 1.2em;
        line-height: 3;
        font-family: 'Poppins', sans-serif;
        ;
        /* margin-left: 30px; */
    }

    .footer {
        margin-top: 100%;
    }

    .button {
        color: white;
        text-align: center;
        margin-left: 22%;
        margin-bottom: 1em;
        font-family: 'Poppins', sans-serif;

    }
    .parent2 div{
        height:350px;
        background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            margin:6px;
            border-radius:6px;
            margin-right:0 !important;
            width:100%;
            font-family: 'Poppins', sans-serif;
}
    .parent2 {
  display: grid;
  grid-template-columns: 1fr 2fr 2fr 2fr;
  grid-template-rows: 1fr;
  gap: 0% 1%;
  grid-auto-flow: row;
  padding:1%;
}
#parent2{
    width:100%;
    /* padding-right:5%; */
}
.parent2 #div_samo_1 { grid-area: 1 / 1 / 2 / 3; 
text-align:center;
width:30%;}
.parent2 .div2 { grid-area: 1 / 2 / 2 / 3; }
.parent2 .div3 { grid-area: 1 / 3 / 2 / 4; }
.parent2 .div4 { grid-area: 1 / 4 / 2 / 5; }

#parent2 .div4{
    margin-right:50px;
}
.span_istaknuto {
        background-color: #1d3557;
        color: white;
        font-weight: bold;
        border-radius: 3px;
        font-size: 1.2em;
/* .podnaslov_h1{
    width:30%;
} */
}
#detaljnije{
    text-align:center !important;
    clear:both;
    margin-top:1%;
    font-size:1.2em;
}
.parent2 a {
    text-decoration: none;
    color: white;
}
.parent2 button{
    background-color: #e63946;
    color: white;
    font-weight: bold;
    font-size: 1.5em;
    
    text-decoration: none;
    border-radius: 12px;
    padding: 7%;
    border: none;
    text-align: center;
    margin-top:1em;
    
}
}
.footer div{
    margin-top:100%;
}
#dugme_prijava{
    background-color: #1d3557;
color: white;
font-weight: bold;
font-size: 20px;
text-decoration: none;
border-radius: 12px;
padding: 10px;
border: none;
text-align: center;
}
    </style>
</body>

</html>