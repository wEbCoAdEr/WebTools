
# WebTools

This is a command line interface tool developed in PHP that offers various functionalities, including IP scanning and domain scanning.

## Getting Started

To use this tool, you need to have PHP installed on your system. You can download and install PHP from the official website: [https://www.php.net/downloads](https://www.php.net/downloads)

### Installation

1.  Clone the repository to your local machine using the following command:

bashCopy code

`git clone https://github.com/wEbCoAdEr/WebTools.git` 

2.  Navigate to the project directory using the command line.
    
3.  Run the tool by typing `php webtools-v12.php` followed by the desired command and its parameters.
    

## Usage

The CLI tool offers the following functionalities:

### IP Scanner

-   `ip`: Display your IP address information
-   `ip hostname/IP`: Display IP address information of the given hostname or IP
-   `ip reverse hostname/IP`: Display reverse IP scan result of the given hostname or IP
-   `ip scan-port`: Display open ports of the given IP

### Domain Scanner

-   `domain scan-sub domain_name`: Display subdomain scan result of the given domain
-   `domain scan-admin domain_name`: Scans for available admin panel URL of the given domain
-   `domain scan-port domain_name`: Display open ports of the given domain

### Help

-   `help`: Display available tools and commands.

## Contribution

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

This project is licensed under the MIT License - see the [LICENSE](https://chat.openai.com/c/LICENSE) file for details.
