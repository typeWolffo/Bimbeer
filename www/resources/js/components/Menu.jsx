import React from 'react';
import ReactDOM from 'react-dom';

class Menu extends React.Component {
    render() {
        return (
            <div className='wrapper'>
                <button type={"button"} name={"myProfile"} id={"myProfile"}>
                    <i className="fas fa-user"></i>
                </button>
                <h1>Bimbeer (tu bedzie logo)</h1> {/*zmienic na img*/}
                <button type={"button"} name={"settings"} id={"settings"}>
                    <i className="fas fa-cog"></i>
                </button>
            </div>
        )
    }
}

export default Menu;

if (document.getElementById('menu')) {
    ReactDOM.render(<Menu/>, document.getElementById('menu'));
}

