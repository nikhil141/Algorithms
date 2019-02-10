/***
problem : Farmer Feb

 **/  


import java.util.Scanner;
public class Farm
{
    public static void main(String arg[]) {
        Scanner sc = new Scanner(System.in);
        int t, x, y, sum, i, j;
        t = sc.nextInt();
        while (t-- > 0)
        {
            x = sc.nextInt();
            y = sc.nextInt();
            for (i = 1; i <= 1000; i++)
            {
                sum = x + y + i;
                boolean flag = true;
                for (j = 2; j <= sum / 2; j++)
                {
                    if (sum % j == 0)
                    {
                        flag = false;
                        break;
                    }
                }
                if(flag)
                {
                    System.out.print(i);
                    break;
                }
            }
        }
    }
}

