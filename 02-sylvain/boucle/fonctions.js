let students = new Array
(
    new Array
    (
        'Claire',
        'boulbi',
        'toulouse',
        '33'
    ),
    new Array
    (
        'philip',
        'mariaud',
        'marseille',
        '32'
    ),
    new Array
    (
        'philip',
        'plein',
        'marseille',
        '27'
    ),
    new Array
    (
        'julien',
        'beat',
        'aix-en-provence',
        '25'
    ),
    new Array
    (
        'robert',
        'patoche',
        'paris',
        '19'
    )
);

// function CombienDeFois26Trouve(students)
// {
//     caseCourante = "";
//     caseCourante2 = "";
//     tailleTab1 = students.length ;
//     stockage = 0;
//     compteur1 = 0;
//     compteur2 = 0;

//     for(compteur1 = 0 ; compteur1<tailleTab1 ; compteur1 ++)
//     {
//         caseCourante = students[compteur1];
//         tailleTab2 = caseCourante.length;

//         for(compteur2 = 0; compteur2 < tailleTab2 ; compteur2++)
//         {
//             caseCourante2 = caseCourante[compteur2];

//             if(compteur2 == 3)
//             {         
//                 if (caseCourante2 > 25 )
//                 {
//                     stockage ++ ;
//                 }
//             }
//         }
//     }   

//     console.log ("il y a "+ stockage +" d'etudiant de plus de 25ans");
// }
// CombienDeFois26Trouve(students);

// function CombienEtudiantMarseilleTrouvé(students)
// {
//     caseCourante = "";
//     caseCourante2 = "";
//     tailleTab1 = students.length ;
//     stockage = 0;
//     compteur1 = 0;
//     compteur2 = 0;
//     for(compteur1 = 0 ; compteur1<tailleTab1 ; compteur1 ++)
//     {
//         caseCourante = students[compteur1];
//         tailleTab2 = caseCourante.length;

//         for(compteur2 = 0; compteur2 < tailleTab2 ; compteur2++)
//         {
//             caseCourante2 = caseCourante[compteur2];

//             if(compteur2 == 2)
//             {         
//                 if(caseCourante2 == "marseille")
//                 {
//                     stockage ++ ;
//                 }
//             }
//         }
//     }
//     console.log("il y a " + stockage + " étudiant vivant a marseille");
       
// }
// CombienEtudiantMarseilleTrouvé(students);

function CombienEtudiantMarseilleTrouvé(students)
{
    caseCourante = "";
    caseCourante2 = "";
    tailleTab1 = students.length ;
    stockage = 0

    compteur1 = 0;
    compteur2 = 0;
    for(compteur1 = 0 ; compteur1<tailleTab1 ; compteur1 ++)
    {
        caseCourante = students[compteur1];
        tailleTab2 = caseCourante.length;
        check = 0;
        for(compteur2 = 0; compteur2 < tailleTab2 ; compteur2++)
        {
            caseCourante2 = caseCourante[compteur2];

            if((compteur2 == 2)&&(caseCourante2 == "marseille"))
            {
                check ++;
            }
            if((compteur2 == 3)&&(caseCourante2 > 25))
            {
                check ++;
            }
            if((compteur2 == 0)&&(caseCourante2 == "philip"))
            {         
                check++ ;  
            }
            if(check == 3)
            {
                stockage ++;
            }
        } 
        
    

    }
   
    console.log("il y a " + stockage + " étudiant vivant a marseille s'appelant philipe et qui ont plus de 25 ans");
       
}
CombienEtudiantMarseilleTrouvé(students)

