
let no = 5;
let string = '';

for (let i=0;i<no;i++)
{
    for(let j=0;j<no-i;j++)
    {
        string+="*";
    }
    string +="\n";
}

console.log(string);
