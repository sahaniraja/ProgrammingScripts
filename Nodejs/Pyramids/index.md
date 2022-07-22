**1) Downward Triangle Start Pattern**
```
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
```
Output:- ![image](https://user-images.githubusercontent.com/90952992/180356740-93ab127e-da4c-4604-9ad5-4304aa37808e.png)

**2)Left Triangle Pattern**
```
let no = 5;
let string = '';

for (let i=0;i<=no;i++)
{
    for(let j=0;j<i;j++)
    {
        string+="*";
    }
    string +="\n";
}

console.log(string);
```
Outpur: ![image](https://user-images.githubusercontent.com/90952992/180357070-eea8eacd-abb2-4b7e-92ea-1e0a2c6113a8.png)
