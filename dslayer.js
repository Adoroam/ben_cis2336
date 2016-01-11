var slaying = true;
var youHit = Math.floor(Math.random() * 2); 
/*youHit is set to a random number, either 0 (false) or 1 (true) */

var damageThisRound = Math.floor(Math.random() * 5 + 1);
//damageThisRound is set to a random number thats between 1 & 5 (including 5)

var totalDamage = 0;

while(slaying)
{
    if (youHit)
    {
        console.log("Aw yiss, you smaking dragons! " + damageThisRound + " damage!!!");
        
            totalDamage += damageThisRound;
            
                if(totalDamage >= 4)
                {
                    console.log("You straight murdered this fool!");
                    slaying = false;
                } else 
                    {
                        youHit = Math.floor(Math.random() * 2);
                    }
        
    } else 
        {
            console.log("Aw nahh, you getting smaked by a dragon!");
            slaying = false; 
        }
  
}