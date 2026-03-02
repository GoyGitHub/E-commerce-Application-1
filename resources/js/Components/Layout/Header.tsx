import { Link, usePage} from "@inertiajs/react"
import { useState } from "react"
import { PageProps } from "@/types"

const Header = () => {

  const {cart = []} = usePage<PageProps>().props;
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isSearchOpen, setIsSearchOpen] = useState(false);
  
  const cartItemsCount = cart.reduce((acc, item) => acc + item.quantity, 0);

  // handler functions

  return (
    <header className="sticky top-0 z-50 bg-white border-b border-gray-100">
      <div className="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <div className="flex items-center gap-8">
                 <Link href={"/"} className="text-2xl font-bold text-primary-600">
                    Thrive Market
                  </Link>
                  <nav className="hidden md:flex md:items-center md:gap-6"
                  role = "navigation">

                    <Link className="text-sm font-medium text-gray-700 hover:text-primary-600">Home</Link>
                    <Link className="text-sm font-medium text-gray-700 hover:text-primary-600">Product</Link>
                  </nav>
            </div>
          </div>
      </div>
    </header>
  );
}

export default Header