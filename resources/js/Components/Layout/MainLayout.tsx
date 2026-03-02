import { ReactNode } from 'react';
import Footer from './Footer';
import Header from './Header';

interface MainLayoutProps {
    children: React.ReactNode;
}

const MainLayout = ({ children }: MainLayoutProps) => {
  return (
    <div>
        <Header />
        <main className="flex-1">{children} </main>
        <Footer />
    </div>
  )
}

export default MainLayout;