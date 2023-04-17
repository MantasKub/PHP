import { Link } from 'react-router-dom';
import axios from 'axios';
import { useState, useEffect } from 'react';

function SideBar() {

  const [categories, setCategories] = useState([]);

  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/categories')
      .then(resp => setCategories(resp.data));
  }, []);


  return (
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
      <Link to="/" className="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
        <h6>Home</h6>
      </Link>
      <h4>Categories</h4>
      <ul class="nav nav-pills flex-column mb-auto">
        {categories.map(el =>
          <li key={el.id}><Link to={'/category/' + el.id} className=" px-2 link-dar">{el.name}</Link></li>
        )}
      </ul>
    </div>
  )
}

export default SideBar;