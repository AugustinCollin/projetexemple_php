 namespace Matrice
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nbLignes ;
            int intCol;
            int[,] matrice;

            LireEntier("Veillez choisir le nombre de lignes que lr tableau contiendra : ", out nbLignes);
            LireEntier("Veillez choisir le nombre de colones que lr tableau contiendra : ", out intCol);

            CreMatrice(nbLignes, intCol, out matrice);
            Console.WriteLine(ConCatMatrice(matrice));

        }
        static void CreMatrice(int nbLignes , int intCol , out int[,] matrice)
        {
            Random alia = new Random();
            matrice = new int[nbLignes, intCol];
            for (int iLigne = 0; iLigne < matrice.GetLength(0); iLigne++)
            {
                for (int iCol = 0; iCol  < matrice.GetLength(1); iCol++)
                {
                    matrice[iLigne, iCol] = alia.Next(0, 21);
                }
            }
        }
        static string ConCatMatrice(int[,] matrice)
        {
            string concatMatrice = " ";
            for (int iLigne = 0; iLigne < matrice.GetLength(0); iLigne++)
            {
                for (int iCol = 0; iCol < matrice.GetLength(1); iCol++)
                {
                    concatMatrice = concatMatrice + matrice[iLigne, iCol] + " ";
                }
                concatMatrice = concatMatrice + "\n";
            }
            return concatMatrice;
        }
        static void LireEntier(string question, out int valeur)
        {
            string nUser;
            Console.Write(question);
            nUser = Console.ReadLine();

            while (!int.TryParse(nUser, out valeur) )
            {
                Console.WriteLine("Erreur ! Veuillez entrer un entier entre " );
                Console.Write(question);
                nUser = Console.ReadLine();
            }
        }s
    }
}