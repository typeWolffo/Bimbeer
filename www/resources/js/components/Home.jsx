import React from 'react';
import ReactDOM from 'react-dom';

class Home extends React.Component {
    constructor() {
        super();
        this.state = {
            data: null
        }
    }

    componentDidMount() {
        fetch('/api/users-information')
            .then(res => res.json())
            .then(res => {
                this.setState({
                    data: res
                })
            })
            .catch(error => console.error(error))
    }

    getData() {
        console.log(this.state.data)
    }

    render() {
        return (
            <div className="profileSwiper">
                <div className="swipeTarget">
                    <img src="{avatar}" alt="avatar"/>
                    <div className="userName">{this.state.data ? this.state.data[0].first_name : 'JD'}</div>
                    <div className="prefAlcohol">Preferowany alkohol</div>
                    <div className="interests">Tematy rozmowy</div>
                </div>
                <div className="buttons">
                    <button type={"button"} name={"nope"} id={"nope"}>
                        <i className="fas fa-times"></i>
                    </button>
                    <button type={"button"} onClick={() => this.getData() } name={"yes"} id={"yes"}>
                        <i className="fas fa-beer"></i>
                    </button>
                </div>
            </div>
        )
    }
}

export default Home;
if (document.getElementById('home')) {
    ReactDOM.render(<Home/>, document.getElementById('home'));
}
