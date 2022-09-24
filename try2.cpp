#include <iostream>

using namespace std;
class complex
{
    
    int real;
    int img;
    public:
      complex(int r,int i)
      {
         real=r;
         img=i;
      }
     friend complex operator+(complex &c1,complex &c2);
      friend void display(complex &c3);

      
};
complex operator+(complex &c1,complex &c2)
      {
         complex temp(0,0);
          temp.real=c1.real+c2.real;
          temp.img=c1.img+c2.img;
             return temp;
      }
      void display(complex &c3)
      {
          cout<<c3.real<<endl<<c3.img;
      }
      
int main()
{
    complex c1(9,9);
    complex c2(8,4);
    complex c3(0,0);
       c3=c1+c2;
     display(c3);
      return 0;
}