#include <fstream>
#include <iostream>
using namespace std;
 
int main () {
    char ch;
int count=0;
   char data[100];

   
   ofstream outfile;
   outfile.open("afile.dat");

   cout << "Writing to the file" << endl;
   cout << "Enter your name: "; 
   outfile<<"you are he";
   outfile.close();

  
//    ifstream infile; 
//    infile.open("afile.dat"); 
 
//    cout << "Reading from the file" << endl; 
    
//    infile >> ch; 
//      while (!infile.eof())
//      {
//         cout<<ch;
//         count++;
//         infile>>ch;
    
//      }
//    infile.close();
   ifstream fin; 
   fin.open("afile.dat"); 
 
   cout << endl<<"Reading from reverse the file" << endl; 
    for (int i =count; count>0; count--)
    {
        fin>>data[count];
        cout<<data[count];
    }
    
   fin.close();

   return 0;
}
