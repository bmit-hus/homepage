$(document).ready(function(){   // this line activates jQuery when file ready.

    var quotes = [
        /* 01 */ "Stand up straight with your shoulders back.",
        /* 02 */ "Treat yourself like someone you are responsible for helping.",
        /* 03 */ "Make friends with people who want the best for you.",
        /* 04 */ "Compare yourself to who you were yesterday, not to who someone else is today.",
        /* 05 */ "Do not let your children do anything that makes you dislike them.",
        /* 06 */ "Set your house in perfect order before you criticize the world.",
        /* 07 */ "Pursue what is meaningful (not what is expedient).",
        /* 08 */ "Tell the truth - or, at least, don't lie.",
        /* 09 */ "Assume that the person you are listening to might know something you don't.",
        /* 10 */ "Be precise in your speech.",
        /* 11 */ "Do not bother children when they are skateboarding.",
        /* 12 */ "Pet a cat when you encounter one on the street.",
        /* 13 */ "Good.", 
        /* 14 */ "Get after it.", 
        /* 15 */ "Get some.", 
        /* 16 */ "The only way to do something, is to do it.", 
        /* 17 */ "Remember, before you can be great, you've got to be good. Before you can be good, you've got to be bad. But before you can even be bad, you've got to try.",
        /* 18 */ "I'm not telling you it's going to be easy - I'm telling you it's going to be worth it.",
        /* 19 */ "All you can do is all you can do. But all you can do is enough."
    ];

    var authors = [
        /* 01 */ "- Jordan B Peterson.", 
        /* 02 */ "- Jordan B Peterson.", 
        /* 03 */ "- Jordan B Peterson.", 
        /* 04 */ "- Jordan B Peterson.", 
        /* 05 */ "- Jordan B Peterson.", 
        /* 06 */ "- Jordan B Peterson.", 
        /* 07 */ "- Jordan B Peterson.", 
        /* 08 */ "- Jordan B Peterson.", 
        /* 09 */ "- Jordan B Peterson.", 
        /* 10 */ "- Jordan B Peterson.", 
        /* 11 */ "- Jordan B Peterson.", 
        /* 12 */ "- Jordan B Peterson.", 
        /* 13 */ "- Jocko Willink.", 
        /* 14 */ "- Jocko Willink.", 
        /* 15 */ "- Jocko Willink.", 
        /* 16 */ "- William Painter.", 
        /* 17 */ "- Art Williams.",
        /* 18 */ "- Art Williams.",
        /* 19 */ "- Art Williams."
    ];

    // First, generate a random number between 1 and $lengthOfString
    var randomIndex = Math.floor(Math.random()*quotes.length);

    // Output:
    $("#quote").html(quotes[randomIndex]);
    $("#author").html(authors[randomIndex]);
}) 