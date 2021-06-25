let student = {
    firstname: 'Alfred',
    lastname: 'Dupont',
    // birthdate: '1997-07-12'
    birthdate: new Date('1997-07-12'), // format américain yyyy-mm-dd
    grades: [14, 12, 16, 13]
};

console.log(student.firstname);

let students = [
    {
        firstname: 'Alfred',
        lastname: 'Dupont',
        birthdate: new Date('1997-07-12'), 
        grades: [13, 12, 16, 13]
    },
    {
        firstname: 'Julie',
        lastname: 'Durand',
        birthdate: new Date('1996-04-10'), 
        grades: [14, 12, 16, 13]
    }
];

// afficher la première note du deuxième étudiant
console.log(students[1].grades[0]);

