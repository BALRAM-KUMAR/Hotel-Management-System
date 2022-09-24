#include<iostream>
using namespace std;

class a
{
    int x=8;
      public:
       virtual void input()
        {
            cin>>x;
        }
       virtual void display()
        {
            cout<<x<<endl;
        }
};
class b:public a
{
     int y;
     public:
     void input()
     {
        cin>>y;
     }
     void display()
     {
        cout<<y<<endl;
     }

};

  int main()
  {
    a a1;
    b b1;
     
      a *ptr;
      ptr=&a1;
      ptr->input();
      ptr->display();
      ptr=&b1;
      ptr->input();
      ptr->display();

  }